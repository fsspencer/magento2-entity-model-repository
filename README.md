# Magento 2 Entity Model Repository
This is a sample extension to show you how to create a new table entity, model and a repository.
You can take this extension as an example to create your own entities.

## Instructions

NOTE:  This extension is just an example of how to create a new entity, not an usable extension.

1. Create a table using InstallSchema
2. Create the Model, Resource Model and Collection class
3. Create a Repository Interface under the Api directory
4. Create the entity Interface under Api/Data
5. Create a custom SearchResultInterface under Api/Data
6. Create the Repository Model by implementing the interface you created in step 3 and put your logic within each method and using your custom SearchResultInterface for the getList() method
7. Put a preference value in etc/di.xml for each interface you created
8. Create the endpoints for the API under etc/webapi.xml

IMPORTANT: For interfaces, make sure to put the right Phpdoc comments based on the classes or data types that each method uses for parameters en return values, otherwise it won't work.

## Compatibility
- Magento 2.0
- Magento 2.1
- Magento 2.2