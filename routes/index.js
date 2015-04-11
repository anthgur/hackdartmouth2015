var express = require('express');
var bodyParser = require('body-parser')
var router = express.Router();

router.use(bodyParser.json());

router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
		res.json({ message: request.body.name });
    }
    else
    {
        res.json({ message: "GET" });
    }
});

module.exports = router;

