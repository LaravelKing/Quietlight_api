Feature: Question

Scenario: An registered user trying to create a Question without a summary
Given that I want to make a new "Question"
    And its "question" is "Behat Question"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/question"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Question
Given that I want to make a new "Question"
    And its "summary_id" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/question"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property
    And the response has a "created_by" property
    And the "created_by" property is an object

Scenario: An registered user trying to update a Question
Given that I want to update a "Question"
    And I found an "id" from "/question" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And its "question" is "Behat Question Updated"
    And its "answer" is "HTML"
    And the request is sent as JSON
    When I request "/question/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
    And the "question" property equals "Behat Question Updated"
    And the "answer" property equals "HTML"

Scenario: An registered user trying to delete a Question
Given that I want to delete a "Question"
    And I found an "id" from "/question" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/question/{id}"
    Then the response status code should be 200
    And the response should be JSON