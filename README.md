# BackupBd library backup using MySQLBackup



To install the library, run the following command:

``` sh
composer require devphp-pmro/backupsql
```

To use the library, simply require the composer to autoload, invoke the class and call the method:

``` sh

<? php

open the bd.php file in the source folder and enter the credentials for connecting to the database

//define the connection settings to the database for backup

define("CONFIG",["host" => "host,
                "user" => "user",
                "password" => "password",
                "data_base" => "data_base",
                "port"=> "port"]);

default port 3306

// compress or download in method contruct is optional

require __DIR__. '/vendor-dir/autoload.php';

use Source\BackupSql;

$bk = new BackupSql($fileName, true, "zip",true); // new instance

$fileName = 'backup'.date('Y-m-d'); //the file name in the building method is mandatory

$bk->createSelectTables(["table_name","table_name1"]); //insert the table numbers to be backed up

$bk = new BackupSql($fileName, true, "zip",true); // new instance

$bk->createAllTables(); //all tables

// compress = zip | gz | gzip (optional)

// download true or false

if deleteFile is false the file will be saved in the folder where the class was instantiated, so if you want the file not to be automatically saved, put deleteFile true and download as true

```

### Developers
* [Leonardo] - Developer of this library!
* [devphp] - Official website: <https://devphp-pmro.github.io/>
* [MySQLBackup] - Lib to backup mysql

License
----

MIT

