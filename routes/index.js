var express = require('express');
var bodyParser = require('body-parser')
var router = express.Router();

router.post('/desktop', function(req, res) {
    if (req.method == 'POST') {
		res.json({ message: "POST desktop" });
	}
	else{
		res.json({ message: "GET desktop" });
	}
	
}
router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
		res.json({ message: "POST webapp" });
    }
    else
    {
        res.json({ message: "GET webapp" });
    }
});

module.exports = router;

