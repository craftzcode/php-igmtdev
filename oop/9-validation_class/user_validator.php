<?php

// Create a user validator to handle validation
// Constructor which takes in POST data from form
// Check required "fields to check" are present in the data
// Create methods to validate individual fields
// -- A method to validate a username
// -- A method to validate an email
// Return an error array once all checks are done

class UserValidator
{
  private $data;
  private $errors = [];
  private static $fields = ['username', 'email'];

  public function __construct($post_data)
  {
    $this->data = $post_data;
  }

  public function validateForm()
  {
    foreach (self::$fields as $field) {
      if (!array_key_exists($field, $this->data)) {
        trigger_error("$field is not present in data");
        return;
      }
    }

    $this->validateUsername();
    $this->validateEmail();
    $this->errors;
  }

  private function validateUsername()
  {
    // NOTE: Remove (whitespace) or (specific chars)
    $val = trim($this->data['username']);

    // NOTE: Check if the (val) is empty
    if (empty($val)) {
      $this->addError('username', 'username cannot be empty');
    } else {
      // NOTE: Check if the (val) is an alphanumeric & 6 - 12 length
      if (!preg_match('/^[a-zA-Z0-9]{6,12}$/', $val)) {
        $this->addError('username', 'username must be 6-12 chars & alphanumeric');
      }
    }
  }

  private function validateEmail()
  {
    // NOTE: Remove (whitespace) or (specific chars)
    $val = trim($this->data['email']);

    // NOTE: Check if the (val) is empty
    if (empty($val)) {
      $this->addError('email', 'email cannot be empty');
    } else {
      // NOTE: Check if the (val) is an email
      if (!filter_var($val, FILTER_VALIDATE_EMAIL)) {
        $this->addError('email', 'email must be a valid email');
      }
    }
  }

  private function addError($key, $value)
  {
    $this->errors[$key] = $value;
  }
}
