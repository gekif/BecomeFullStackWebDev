import React from 'react';

class App extends React.Component {

    constructor(props) {
        super(props);

        this.state = {
            header: 'This is the Header',
            content: 'This is the Content',
            footer: 'This is the Footer',
        };
    }

    render() {
        return (
            <div>
                <Header propsHeader={this.state.header}/>
                <Content propsContent={this.state.content}/>
                <Footer propsFooter={this.state.footer}/>
            </div>
        );
    }
}

class Header extends React.Component {
    render() {
        return (
            <div>
                <h1>{this.props.propsHeader}</h1>
            </div>
        );
    }
}

class Content extends React.Component {
    render() {
        return (
            <div>{this.props.propsContent}</div>
        );
    }
}

class Footer extends React.Component {
    render() {
        return (
            <div>{this.props.propsFooter}</div>
        );
    }
}

export default App;