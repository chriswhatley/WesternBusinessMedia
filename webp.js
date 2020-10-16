const imagemin = require('imagemin');
const imageminWebp = require('imagemin-webp');

(async () => {
  await imagemin(['source/assets/img/clients/*.{jpg,png}'], {
    destination: 'source/assets/img/clients/',
    plugins: [
      imageminWebp({quality: 65})
    ]
  });

  console.log('Images optimized');
})();