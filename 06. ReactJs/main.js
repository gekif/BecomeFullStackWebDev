import React from 'react';
import ReactDom from 'react-dom';
import App from './app.jsx';

ReactDom.render( <App
    header={"This is the header"}
    content={"This is the content"}
    footer={"This is the footer"}
/>, document.getElementById('app'));