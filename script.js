
function listener (event) {

	var url = fwParams.fwUrl; //fwParams is created with php

	if (event.origin !== url) 
		return;

	if(event.data.event === 'assetSelected') {
		handleSelected(event.data, url);
	} else if (event.data.event === 'assetExported') {
		handleExported(event.data, url);
	}
}

function handleSelected(data, url) {

	setTimeout(function () {
		var frameURL = url + '/fotoweb/views/publish?i=' + encodeURIComponent(data.asset.href) + '&TB_iframe=true&width=600&height=550';
		tb_show("My Caption", frameURL);
	}, 300);
}

function handleExported (data, url) {
	wp.media.editor.insert('<img class="alignnone size-medium wp-image-14" src="' + data.export.export.image.normal + 
		'" alt=""'+
		'" width="' + data.export.export.size.w+
		'" height="' + data.export.export.size.h +
		'" />');
	tb_remove();
}

if (window.addEventListener) {
	addEventListener('message', listener, false);
}



