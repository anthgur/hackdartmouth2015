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
		res.redirect(307, 'http://maxrenke.com/computecoin/backend.php' + req.path);
    }
    else
    {
        
    }
});

module.exports = router;

