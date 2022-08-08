# SQLReport
Plugin for SuiteCRM - generates spreadsheet downloads based on parameterized SQL queries.

The plugin consists of two modules SQLReport and SQLReportParameter. 

## Installation
+ Download the zip
+ Upload and install via Module Loader into your SuiteCRM installation.

## Module SQLReport

This modules is for executable SQL reports. Each reports consists of a 
* name, 
* description and 
* SQL query.
Because of the security implication and the necessary knowledge of the data model,
only administrators should be allowed to create and edit SQLReports and subsequent SQLReportParameters.

The SQL query can be parameterized. For each parameter there must be the placeholder ? in the query.
If you want to use the same value multiple times, each occurance must have it's own placeholder
and the value has to be entered later on each time seperately.

The placeholder substitution escapse SQL reserved characters.

### Example query

Simple example for a query with one parameter.

```
SELECT name as Name from accounts WHERE name LIKE '?%'
```

Of course, the result of the example is trivial an can be achieved much easier with onboard tools.
But you can use the whole complexity of SQL for your reports.

### Run report

In the detail view, you have the action to 'run' the report.
If the query has SQLReportParameters associated, the next view will be a form, where you can enter the parameter values.

## Module SQLReportParameter

For each placeholder in the query, the SQLReport needs an SQLReportParameter.
An SQLReportParameter consists of a
* name and a
* description and a
* position as number.

The position has to match the position of the dedicated placeholder in the query.

## License

This software is licensed under the GNU AFFERO GENERAL PUBLIC LICENSE v3

## Disclaimer
This software comes with no warranty. Use at your own risk!
