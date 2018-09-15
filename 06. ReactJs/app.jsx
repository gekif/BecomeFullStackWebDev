import React from 'react';

class App extends React.Component {
    render() {
        let style = {
            backgroundColor: 'blue',
            color: 'white',
            fontSize: '40px'
        };

        let var1 = 8;

        return (
            <div>
                We're Learning ReactJS
                <div data-shahattr="value">A New Div</div>
                <span style={style}>Hello World</span>
                <div>{4 + 4}</div>
                <div>{var1 === 7 ? 'True' : 'False'}</div>
            </div>
        );
    }
}

export default App;