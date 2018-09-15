import React from 'react';

class App extends React.Component {
    constructor(){
        super();

        this.state = {
            data: []
        };

        this.stateHandler = this.stateHandler.bind(this);
    }

    stateHandler(e) {
        this.setState({data: e.target.value})
    }

    render() {
        return(
            <div>
                <div>{this.state.data}</div>
                <button onClick={this.stateHandler}>Click Here To Update</button>
                <input type="text" onChange={this.stateHandler} />
            </div>
        );
    }
}

export default App;