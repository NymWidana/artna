<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<title>My Laravel</title> 
</head> 
<body> 
<h1>Produk: {{ isset($produk) ? $produk : 'Produk Kosong' }}</h1> 
</body> 
</html>