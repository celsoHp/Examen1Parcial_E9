import React, { Component, Fragment } from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';


export default class CreateModelos extends Component {

    constructor(props) {
        super(props);
        this.state = {
            selectedmodelos:{ id: 0, Modelo:'', description:'', Proveedor:'', color:'' },
            openModal: false,
            modelos: []
         }
        
        this.editItem = this.editItem.bind(this);
        this.colseModal = this.colseModal.bind(this);
        this.deleteItem = this.deleteItem.bind(this);
        this.openEditItemModal = this.openEditItemModal.bind(this);
        this.handleInputChange = this.handleInputChange.bind(this);

        console.log( "The state ", this.state );
   
    
    }

   deleteItem(modelos){
       console.log("deleting stask.. ", modelos)
       axios.delete('http://localhost:8080/Carros/public/api/delete/modelos', modelos ).then(res => {
           alert(res);
       })
   }

    loadTask(){
        axios.get('http://localhost:8080/Carros/public/api/modelos', modelos ).then((response) => {
            this.setState({
                tasks:response.data
            })
        })
    }
    

    componentWillMount(){
        this.loadTask();

    }
    
    render() {
        let modelos = this.state.modelos.map((modelos) => {
            return(
                <tr key={modelos.id}>
                   
                    <th>id</th>
                    <th>Modelo</th>
                    <th>description</th>
                    <th>Proveedor</th>
                    <th>olor</th>
                   
                    <td>  
                        
                       <button onClick={ () => this.openEditItemModal(modelos) } className="button is-primary">Editar</button><td>
                       </td>
                       <button onClick={ () => this.deleteItem(modelos) } className="button is-danger">Eliminar</button></td>
        
              </tr>  
            )
        }) 
        return (
<Fragment>
                 <table className="table">
                     <thead>
                     <tr>
                           <th><abbr title="position">Id</abbr></th>
                           <th>NombreModelo</th>
                           <th>Descripción</th>
                           <th>Proveedor</th>
                           <th>color</th>
                           <button class="button is-white">White</button>

                </tr>      
           </thead>
           <tbody>
              {modelos}
           </tbody>
           
         </table>             
</Fragment>
              
        );
        
    }
}
if (document.getElementById('createModelos')) {
    ReactDOM.render(<CreateModelos />, document.getElementById('createModelos'));
}