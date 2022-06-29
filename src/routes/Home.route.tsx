import { useState } from "react";
import { Link } from "react-router-dom";
import ConfirmArrow from "../components/ConfirmArrow";
import WhiteBox from "../components/WhiteBox";

export default function HomeRoute(): JSX.Element {
    const [city, setCity] = useState("");
    const [visible, setVisible] = useState(false);
    const b1 = 
        <> 
            <div>
                {"Ti svegli in una stanza che non conosci, non ricordi nulla e senti del leggero odore di muffa."+
                " Non ci vedi bene e hai la sensazione di essere stato drogato. Dopo qualche minuto, riconosci la sagoma di una persona."+
                " È Emanuele Atturo e ti sta facendo delle domande. Vuole sapere da dove arrivi:"}
            </div>
            <div className="text-center my-5 flex align-middle">
                <input className="border-solid border-black border-4 mr-2 px-2" 
                    value={city} 
                    onChange={e => setCity(e.target.value)}/>
                <ConfirmArrow onClick={() => city.length > 0 ? setVisible(true) : setVisible(false)}/>
            </div>
        </>

    const b2 = "«Pazzesco! Allora potresti essere tu \"il Marco D'Ottavi di "+city+"\" di cui mi parlano da Danzica!»."+
                " Emanuele inizia ad agitarsi e ti accorgi solo ora che c'è un'altra persona di fianco a lui, che non riesce a "+
                "smettere di ripetere «Pazzesco»."+
                " È Dario Saltari, insieme ti spiegano che stanno cercando il \"nuovo Marco D'Ottavi\" e che potresti essere tu;"+
                " per questo devi rispondere a delle domande. Sei pronto?"
    return <>
        <div className="container text-center">
            <WhiteBox body={b1} />
            {visible ? <WhiteBox body={b2} /> : <></>}
            {visible ? <Link to="test" className="border-solid border-black border-4 bg-white px-5 py-2">Conferma</Link> : <></>}
        </div>
    </>
}