# Fancy Migrations Menu

## Purpose

This was proof of concept of something I asked for in a project where we were having to manage multiple migrations for several apps. 

## Design

The idea was simple. Create a migrations table

 * name varchar(25)
 * dateCompleted datetime

Next, have a process that reads the table when the menu starts and creates a key-value pair.
The process then reads the migrations folder for objects that would essentially be MenuObjects. 
As for if a migration has been completed two things are evaluated, in the addItem function the 
value of `showItemExtra` is the result of `isset($keyValue[$ticketNumber])` the ItemExtra would 
be set to '[COMPLETED]' and finally the `disabled` flag would be set based on the result of:
`isset($keyValuePair[$ticketNumber])`

Properties

 * `public static` NAME - corresponds to ticket number (sans dash e.g. NG-628 would be NG628); used for recognition of migration and is also the classname 

Methods

 * __toString() - Returns the value of a static NAME varible which was corresponded with the ticket number 
 * __invoke(CliMenu $menu) - Calls and returns the execute() function
 * execute() - Runs said migration finishes by calling and returning  markComplete
 * markComplete() - Writes to the migrations table with the value of the static NAME variable and the SQL: NOW() returns boolean on success

After selecting a migration menu the object then executes the invoke magic method and then executes the migration and updates the keyvalue pair. 
