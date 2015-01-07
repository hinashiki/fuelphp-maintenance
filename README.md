# fuelphp-maintenance
add maintenance mode to FuelPHP.  
this is FuelPHP package. if you want to use, please use as package.  
How to install : http://fuelphp.com/docs/general/packages.html#/installing

## Basic usage
throw as below.
```
throw new \HttpServerMaintenanceException("your maintenance message.");
```


## Set maintenance mode
create fuel/app/config/maintenance.php  
and please set like this.
```
return array(
  "maintenance_mode" => true
);
```

```
check maintenance mode.
MaintenanceMode::check();
```
display maintenance page forcedly.
when maintenance_mode === true .

## Change maintenance view
create fuel/app/views/503.php and customize it.

### Change maintenance view file
if you want to change maintenace view file from default(503.php),  
please create fuel/app/config/maintenance.php 
and set like this.
```
return array(
  // defalut = "503"
  "view" => "your_maintenance_view"
);
```
