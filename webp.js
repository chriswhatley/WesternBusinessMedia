const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/img/events/*.{jpg,png}'], {
    destination: 'source/assets/img/events/',
    plugins: [
      imageminWebp({quality: 65})
    ]
  });

  console.log('Images optimized');
})();