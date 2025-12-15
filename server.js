const express = require('express');
const path = require('path');
const compression = require('compression');
const helmet = require('helmet');

const app = express();
const PORT = process.env.PORT || 3000;

// Basic security headers; disable CSP by default to avoid breaking existing inline scripts/styles
app.use(
  helmet({
    contentSecurityPolicy: false,
  })
);

// Enable gzip compression
app.use(compression());

// Serve all static files from the project root
const staticRoot = __dirname;
app.use(
  express.static(staticRoot, {
    extensions: ['html'],
    maxAge: '1d',
  })
);

// Explicit root route (serves index.html)
app.get('/', (_req, res) => {
  res.sendFile(path.join(staticRoot, 'index.html'));
});

// Fallback 404 handler
app.use((req, res) => {
  res.status(404).send('Not Found');
});

app.listen(PORT, () => {
  // eslint-disable-next-line no-console
  console.log(`SunlightMC static site is running on http://localhost:${PORT}`);
});
