var express = require('express');
var bodyParser = require('body-parser')
var router = express.Router();

router.use(bodyParser());

router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
		var userName = req.body.name;
		  var html = 'Hello: ' + name + '.<br>' +
					 '<a href="/">Try again.</a>';
		  res.send(html);
    }
    else
    {
        res.json({ message: "GET" });
    }
});

module.exports = router;

