import React from 'react';

class App extends React.Component {
    render() {
        return (
            <div>
                <div>
                    <h1>{this.props.header}</h1>
                </div>
                <div>{this.props.content}</div>
                <div>{this.props.footer}</div>
            </div>
        );
    }
}

export default App;