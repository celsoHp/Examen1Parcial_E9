import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';

export default class Example extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name:'',
            description:'',
            store_id:0,
            stores:[
                {id:1, name:'Doña mary'},
                {id:2, name:'Tienda de la esquina'},
                {id:3, name:'toyota'},
            ]
        };
        this.handleInputChange = this.handleInputChange.bind(this);
        this.saveButton = this.saveButton.bind(this);
        console.log("Constructor", this.state);
    }
    handleInputChange(event){
        const target = event.target;
        const value = target.type === 'checkbox' ? target.checked : target.value ? target.type === 'number' ? parseInt( target.value ) : target.value : target.value;
        const name = target.name;
        this.setState({
            [name]: value
        });
    }
    saveButton(){
        const { Modelo, description, Proveedor } = this.state;
        const payload = {
            Modelo: Modelo,
            description: description,
            Proveedor: Proveedor,
            amount: 0
        }
        axios.post(`http://localhost:8080/Carros/public/api/save/Example`, payload ).then(res => {
            alert(res.success);
        });
        console.log(this.state);
    }

    render() {
        return (
                 <div className="field">
                     <table class="table">
                        <thead>
                            <tr>
                               <th><abbr title="Position">Id</abbr></th>
                               <th><abbr title="Played">Nombre</abbr></th>
                               <th><abbr title="Won">Descripción</abbr></th>
                               <th><abbr title="Won">Proveedor</abbr></th>
                                <th><abbr title="Drawn">color</abbr></th>
                            </tr>
                       </thead>
                     </table>

                 </div>
        );
    }


}

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
