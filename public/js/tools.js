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