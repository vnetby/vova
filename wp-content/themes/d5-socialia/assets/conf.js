const fs = require('fs');
const ABSPATH = './wp-content/themes/d5-socialia/assets';


const assets = [
  // 'jquery3',
  // 'customScrollbar',
  // 'aos',
  // 'animate-css',
  // 'bootstrap4',
  // 'hamburgers',
  'slick',
  // 'parallax',
  // 'js-video-player',
  // 'direction-hover',
  'fancybox'
];



const readAssetsPath = () => {
  return new Promise (( resolve, reject ) => {
    fs.readdir( ABSPATH, (err, data) => {
      if ( err ) {
        reject ( err );
        return;
      }
      resolve( data );
    });
  });
}



const getFiles = ( paths, ext ) => {
  return new Promise ( ( resolve, reject ) => {
    let res = '';
    paths.forEach ( path => {
      let files = fs.readdirSync( `${ABSPATH}/${path}` );
      files.forEach ( file => {
        if ( file.endsWith(`.${ext}`) ) {
          res += fs.readFileSync( `${ABSPATH}/${path}/${file}`);
        }
      });
    });
    resolve( res );
  });
}



readAssetsPath ()
.then( data => {
  let connected = data.filter( item => assets.indexOf ( item ) > -1 );
  if ( !connected.length ) return;

  getFiles( connected, 'css' )
  .then ( file => {
    fs.writeFile( `${ABSPATH}/assets.min.css`, file, err => {
      if ( err ) throw err;
      console.log( 'css has been written' );
    } );
  } );

  getFiles( connected, 'js' )
  .then ( file => {
    fs.writeFile( `${ABSPATH}/assets.min.js`, file, err => {
      if ( err ) throw err;
      console.log( 'js has been written' );
    } );
  } );
});
