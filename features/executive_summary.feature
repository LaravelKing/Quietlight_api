Feature: Executive Summary

Scenario: An registered user trying to create a Executive Summary without a summary
Given that I want to make a new "ExecutiveSummary"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/executivesummary"
    Then the response status code should be 400
    And the response should be JSON
    And the response has an "error" property

Scenario: An registered user trying to create a Executive Summary
Given that I want to make a new "ExecutiveSummary"
    And its "summary_id" is "1"
    And its "total_revenue" is "2,000,000" 
    And its "discretionary_earnings" is "46,000,000"
    And its "gross_profit" is "24,000" 
    And its "asking_price" is "553222"
    And its "inventory" is "100000"
    And its "inventory_included" is "0"
    And its "show_multiple" is "1"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/executivesummary"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "summary_id" property
    And the response has an "id" property
    And the "total_revenue" property equals "2000000" 
    And the "discretionary_earnings" property equals "46000000"
    And the "gross_profit" property equals "24000" 
    And the "asking_price" property equals "553222"
    And the "inventory" property equals "100000"
    And the "inventory_included" property equals "0"
    And the "show_multiple" property equals "1"

Scenario: An registered user trying to update a Executive Summary (everything but benefits)
Given that I want to update a "ExecutiveSummary"
    And I found an "id" from "/executivesummary" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
	And its "summary" is "Behat Summary Updated"
    And its "total_revenue" is "1,000,000" 
    And its "discretionary_earnings" is "23,000,000"
    And its "gross_profit" is "12,000" 
    And its "asking_price" is "223222"
    And its "inventory" is "50000"
    And its "inventory_included" is "1"
    And its "show_multiple" is "0"
    And the request is sent as JSON
    When I request "/executivesummary/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
	And the "summary" property equals "Behat Summary Updated"
    And the "total_revenue" property equals "1000000" 
    And the "discretionary_earnings" property equals "23000000"
    And the "gross_profit" property equals "12000" 
    And the "asking_price" property equals "223222"
    And the "inventory" property equals "50000"
    And the "inventory_included" property equals "1"
    And the "show_multiple" property equals "0"


Scenario: An registered user trying to update a Executive Summary (benefits)
Given that I want to update a "ExecutiveSummary"
    And that I send {"benefits":["Beneft 1","Benefit 2"]}
    And I found an "id" from "/executivesummary" while authenticated as "behat@testing.com" and "secret" at "/session/login"
    And I authenticated with "behat@testing.com" and "secret" at "/session/login"
    And the request is sent as JSON
    When I request "/executivesummary/{id}"
    Then the response status code should be 200
    And the response should be JSON
    And the response has an "id" property
    And the "benefits" property is an array
    And the "benefits" property should have length "2"
