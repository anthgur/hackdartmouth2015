var express = require('express');
var router = express.Router();

app.use(express.bodyParser());

router.post('/webapp', function(req, res) {
    if (req.method == 'POST') {
    }
    else
    {
        res.json({ message: "GET" });
    }
});

module.exports = router;

