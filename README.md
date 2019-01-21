# simple_contact_page
a simple contact us page pure css nice to use single page web view in your mobile apps

how to use it? its very simple take a look to below code :

for example imagine that is your android application java code which represent application support button in your client app:

```
support.setOnClickListener(new View.OnClickListener() {
	@Override
	public void onClick(View view) {

		Intent browserIntent = new Intent(Intent.ACTION_VIEW,
						Uri.parse("http://helpers.loopinja.ir/mycookit/index.php?command=get_support_url"));
		startActivity(browserIntent);
	}
});
				
```
so as you see we can use a browser activity with our command insted of static activities that you can never handle them after release :)

```

<?php

if (isset($_GET['command'])) {
    
    if($_GET['command'] == "get_support_url"){
       
       header("Location: /mycookit/contact.php");
       die();
    }
    
} else if(...) {
    ...
}else if(...) {
    ...
}else{
	...
}

?>

```

now you can simply change whole your content depend to you sichuation :)

its better to remove browser cache to avoid reachs wrong content to user :D

```
<?php

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

if (isset($_GET['command'])) {
    
    if($_GET['command'] == "get_support_url"){
       
       header("Location: /mycookit/contact.php");
       die();
    }
    
} else if(...) {
    ...
}else if(...) {
    ...
}else{
	...
}

?>

```

