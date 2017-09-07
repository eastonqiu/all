function unix2Time() {
	Date.prototype.pattern=function(fmt) {        
	    var o = {        
	    "M+" : this.getMonth()+1, //月份        
	    "d+" : this.getDate(), //日        
	    "h+" : this.getHours()%12 == 0 ? 12 : this.getHours()%12, //小时        
	    "H+" : this.getHours(), //小时        
	    "m+" : this.getMinutes(), //分        
	    "s+" : this.getSeconds(), //秒        
	    "q+" : Math.floor((this.getMonth()+3)/3), //季度        
	    "S" : this.getMilliseconds() //毫秒        
	    };        
	    var week = {        
	    "0" : "/u65e5",        
	    "1" : "/u4e00",        
	    "2" : "/u4e8c",        
	    "3" : "/u4e09",        
	    "4" : "/u56db",        
	    "5" : "/u4e94",        
	    "6" : "/u516d"       
	    };        
	    if(/(y+)/.test(fmt)){        
	        fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));        
	    }        
	    if(/(E+)/.test(fmt)){        
	        fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "/u661f/u671f" : "/u5468") : "")+week[this.getDay()+""]);        
	    }        
	    for(var k in o){        
	        if(new RegExp("("+ k +")").test(fmt)){        
	            fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));        
	        }        
	    }        
	    return fmt;        
	} 

	var dateTime = new Date($('#ut_fromUnixtime').val() * 1000);
    $('#ut_2TimeAtGMT8').val(dateTime.pattern("yyyy-MM-dd hh:mm:ss"));
}

function time2Unix() {
	var time = $("#ut_fromTimeForm input");
	var date=new Date(); 
	date.setFullYear(time[0].value); 
	date.setMonth(time[1].value-1); 
	date.setDate(time[2].value); 
	date.setHours(time[3].value); 
	date.setMinutes(time[4].value); 
	date.setSeconds(time[5].value); 
    $('#ut_2Unixtime').val(Date.parse(date)/1000);
}

function randomPassword(size) {
	var seed = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z',
	'a','b','c','d','e','f','g','h','i','j','k','m','n','p','Q','r','s','t','u','v','w','x','y','z',
	'2','3','4','5','6','7','8','9'
	);//数组
	seedlength = seed.length;//数组长度
	var createPassword = '';
	for (i=0;i<size;i++) {
		j = Math.floor(Math.random()*seedlength);
		createPassword += seed[j];
	}
	return createPassword;
}

function crypto(algorithm, message, password, encrypt) {
	switch(algorithm) {
		case 'AES':
			return encrypt ? CryptoJS.AES.encrypt(message, password) : CryptoJS.AES.decrypt(message, password);
		case 'DES':
			return encrypt ? CryptoJS.DES.encrypt(message, password) : CryptoJS.DES.decrypt(message, password);
		case 'RC4':
			return encrypt ? CryptoJS.RC4.encrypt(message, password) : CryptoJS.RC4.decrypt(message, password);
		case 'Rabbit':
			return encrypt ? CryptoJS.Rabbit.encrypt(message, password) : CryptoJS.Rabbit.decrypt(message, password);
	}
	return '';
}

function base64(text, isEncode) {
	if(isEncode) {
		$.base64.utf8encode = true;
		return $.base64('encode', text);
	} else {
		$.base64.utf8decode = true;
		return $.base64('decode', text);
	}
}

$(function() {
	if($("#ut_2TimeAtGMT8").length > 0) {
		var date = new Date();
		$('#ut_fromUnixtime').val(Date.parse(date)/1000);
		unix2Time();

		var timeInput = $("#ut_fromTimeForm input");
		timeInput[0].value = date.getFullYear();
		timeInput[1].value = date.getMonth() + 1;
		timeInput[2].value = date.getDate(); 
		timeInput[3].value = date.getHours(); 
		timeInput[4].value = date.getMinutes(); 
		timeInput[5].value = date.getSeconds();
		time2Unix();
	}
});