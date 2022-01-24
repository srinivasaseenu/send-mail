![Laravel](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)


Hi All!

Here is the example focused on laravel send mail, use invoke controller function, array sort without using array function, and insert the records to database using seeder.

### Preview
![mail](https://github.com/srinivasaseenu/send-mail/blob/main/output/mail.png?raw=true)

### Install Laravel
```bash
composer create-project --prefer-dist laravel/laravel laravel
```

Here are the examples and fucntions

### Example 1 : Array reverse without using array function
```bash
    $arr = [100, 78, 33, 11, 5, 0];
    $new_arr = [];

    for($i=count($arr)-1; $i>=0 ; $i--){
        // dd($arr[5]);
        array_push($new_arr, $arr[$i]);

    }
    dd($new_arr);
```


### Example 2 : Array ascending order without using array function
```bash
    $arr = [78 ,100, 0, 11, 5, 33];
    $new_arr = [];

    for($i=0; $i < count($arr) ; $i++){
        // dd($arr[5]);
        
        $k = 0;

        for($j=0; $j < count($arr) ; $j++){
            if($arr[$i] < $arr[$j]){
                $k = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $k;
            }
        }
        // array_push($new_arr, $arr[$k]);
        // dd($arr[$k]);
        
    }
    dd($arr);
```


### Example 3 : Create user table and seed 10 users and send the test mail from invoke controller function
`create invoke controller`
```bash
    php artisan make:controller Test2Controller --invokable
```
`create user table seeder`
```bash
    php artisan make:seeder UserTableSeeder
```
`create user table and insert records in database`
```bash
    php artisan migrate --seed
```
`create mail`
```bash
    php artisan make:mail Test2Mail
```
`send mail to the users`
```bash
    $users = User::get();
    // dd($users);
    $details = [
        'subject' => 'Test Mail',
        'body' => 'Hello Here is the test mail, please ignore it.',
    ];
    foreach($users as $user){
        try{
            \Mail::to($user->email)->send(new Test2Mail($details));
        }catch(Exception $e){
            dd('Failed to send mail');
        }
    }

    dd('Successfully sent the mail to all users');
```
`create email blade file`
```bash
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test</title>
</head>
<body>
<p> {{$details['body']}} </p>
</body>
</html>
```
