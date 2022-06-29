export default function WhiteBox(props: {title?: string, body?: JSX.Element | string}): JSX.Element {
    return <>
        <div className="py-5 px-10 bg-white border-solid border-black border-4 mb-5 text-left">
            {props.title ? <div className="text-2xl border-solid border-black border-b-4 py-5">{props.title}</div> : <></>}
            {props.body ? <div className="my-5">{props.body}</div> : <></>}
        </div>
    </>
}