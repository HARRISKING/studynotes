app.get('/getNews', function(req, res) {

		var news = [
	    "身边的逻辑学",
	    '牛奶可乐经济学',
	    '看见',
	    '论中国',
	    '乌合之众',
	    '哲学的慰藉'
	  ]
	  var data = [];
	  for(var i=0; i<3; i++){
	    var index = parseInt(Math.random()*news.length);
	    data.push(news[index]);
	  }
		res.header('Access-Control-Allow-Origin','*');
	  res.send(data);
	});
