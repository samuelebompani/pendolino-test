import { Link } from 'react-router-dom'

export default function Navbar(): JSX.Element {
    return <>
        <div className="text-center text-5xl font-bold py-8 border-b-4 border-solid border-black">
            <Link to="./">Pendolino test</Link>
        </div>
        <div className="text-center font-bold">
            <Link to="./about">
                <button className="my-2">About</button>
            </Link>
        </div>

    </>
}