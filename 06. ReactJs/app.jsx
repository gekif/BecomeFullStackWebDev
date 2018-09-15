import React from 'react';

class App extends React.Component {
    constructor(){
        super();

        this.state = {
            data: []
        };

        this.stateHandler = this.stateHandler.bind(this);
    }

    stateHandler() {
        let item = 'The state';
        let dataArray = this.state.data;
        dataArray.push(item);
        this.setState({data: dataArray});
    }

    render() {
        return(
            <div>
                <div>{this.state.data}</div>
                <button onClick={this.stateHandler}>Click Here To Update</button>
            </div>
        );
    }
}

export default App;