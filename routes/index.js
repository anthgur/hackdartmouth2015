var express = require('express');
var router = express.Router();

router.get('/', function(req, res) {
  res.json({ message: "Oh hai" });
});

router.get('/webapp', function(req, res) {
  res.json({ message: "webapp" });
});

module.exports = router;

