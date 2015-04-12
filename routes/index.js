var express = require('express');
var router = express.Router();
var request = require('request');

router.post('/desktop', function(req, res) {
    if (req.method == 'POST') {
		res.json({ message: "desktop POST" });
    }
    else
    {
        
    }
});

router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
		response.writeHead(302, {
				'Location': 'www.maxrenke.com/computecoin/backend.php'
				//add other headers here...
			});
		response.end();
    }
    else
    {
        
    }
});

module.exports = router;

