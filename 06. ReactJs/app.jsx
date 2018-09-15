import React from 'react';

class App extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            header: 'This is the Header',
            content: 'This is the Content',
            footer: 'This is the Footer'
        };
    }



    render() {
        return (
            <div>
                <div>
                    <h1>{this.state.header}</h1>
                </div>
                <div>{this.state.content}</div>
                <div>{this.state.footer}</div>
            </div>
        );
    }
}

/*class Header extends App {
    render() {
        return (
            <div>
                This is the Header
            </div>
        );
    }
}

class Content extends App {
    render() {
        return (
            <div>
                This is the Content
            </div>
        );
    }
}

class Footer extends App {
    render() {
        return (
            <div>
                This is the Footer
            </div>
        );
    }
}*/

export default App;