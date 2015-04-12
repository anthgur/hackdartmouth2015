var express = require('express');
var router = express.Router();

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
		res.writeHead(200, {
		'Location': 'www.maxrenke.com/computecoin/backend.php',
		'Content-Length': res.body.length,
		'Content-Type': 'text/plain' });
		});
		res.end();
    }
    else
    {
        
    }
});

module.exports = router;

