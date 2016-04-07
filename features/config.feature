Feature: Config


Scenario: An registered user trying to get a Config
Given I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/config/1"
    Then the response status code should be 200
    And the response should be JSON
    And the "name" property equals "summary_config_name"
    And the "value" property equals "summary_config_value"
    And the "summary_id" property equals "1"
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to list Configs
Given I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/config"
    Then the response status code should be 200
    And the response should be JSON
    And the response should be an array
    And the response length should be 1

Scenario: An registered user trying to list Configs by summary
Given I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/config?summary_id=1"
    Then the response status code should be 200
    And the response should be JSON
    And the response should be an array
    And the response length should be 1

Scenario: An registered user trying to create a Config
Given that I want to make a new "Config"
	And its "name" is "name"
    And its "value" is "value"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/config"
    Then the response status code should be 200
    And the response should be JSON
    And the "name" property equals "name"
    And the "value" property equals "value"
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to create a Config with a summary
Given that I want to make a new "Config"
    And its "name" is "name"
    And its "value" is "value"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/config"
    Then the response status code should be 200
    And the response should be JSON
    And the "name" property equals "name"
    And the "summary_id" property equals "1"
    And the "value" property equals "value"
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to create a Config with a bad summary
Given that I want to make a new "Config"
    And its "name" is "name"
    And its "value" is "value"
    And its "summary_id" is "99999"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/config"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to update a Config
Given that I want to update a "Config"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "name" is "name2"
    And its "value" is "value2"
    And the request is sent as JSON
    When I request "/config/1"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "name" property equals "name2"
	And the "value" property equals "value2"