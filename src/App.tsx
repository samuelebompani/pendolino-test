import { Routes, Route } from 'react-router-dom'
import Footer from './components/Footer';
import Navbar from "./components/Navbar";
import HomeRoute from './routes/Home.route';

function App() {
    return (
        <>  
            <Navbar />
            <Routes>
                <Route path="/" element={<HomeRoute />}/>
            </Routes>
            <Footer />
        </>
    )
}

export default App;