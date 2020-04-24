@extends('layouts.layout')
<body>	
	<div class="header">		
		<div class="row">
			<div class="col">
				<img src="proViviendas1.jpg" class="img-fluid" alt="Responsive image">
			</div>
			<div class="col-sm-6">
				<h1>Bievenido a</h1>
				<h1>Pro <span>Viviendas</span></h1>
			</div>
		</div>
	</div>
</body>
<style>
.header{
position: absolute;
top: calc(44% - 35px);
z-index: 2;
right: calc(28%);
}
.header div{
float: left;
color: black;
font-family: 'Exo', sans-serif;
font-size: 40px;
font-weight: 200;
}
.header div span{
color: #157424 !important;
}
</style>