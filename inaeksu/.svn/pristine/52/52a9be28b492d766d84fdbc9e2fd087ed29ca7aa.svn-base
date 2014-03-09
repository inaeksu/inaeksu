CORE = 
{
	init: function()
	{
		$('#menuLngItems').children('li').click(function(el){
			CORE.selectLanguage(el);
		});
		CORE.handleLocale();
		CORE.handleActiveLanguage();
	},
	handleLocale: function()
	{
		if(!COOKIES.getCookie('lang'))
		{
			var options = {
					path: '/'/*,
					expires: 7,*/
				};
			COOKIES.setCookie('lang', 'ua', options);
		}
	},
	handleActiveLanguage: function()
	{
		$('#lng-current').text($('#lng-'+COOKIES.getCookie('lang')).text());
	},
	selectLanguage: function(el)
	{
		COOKIES.setCookie('lang', $(el.currentTarget).attr('data-lng'));
		window.location = window.location.href;
	}
};

COOKIES = 
{
	setCookie: function(name, value, options)
	{
		$.cookie(name, value, options);
	},
	getCookie: function(name)
	{
		return $.cookie(name);
	},
	deleteCookie: function(name)
	{
		$.removeCookie(name);
	}
};

$(document).ready(function(){
	CORE.init();
});