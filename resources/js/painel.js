$(document).ready(function(){
	$('.btn-nav').on('click', function()
	{
		$('.nav').toggleClass('active');
		$('.btn-nav i').toggleClass('fa-bars-staggered fa-close');
	});

	$('.alerta .fechar').on('click', function()
	{
		$('.alerta').remove();
		
	});


});