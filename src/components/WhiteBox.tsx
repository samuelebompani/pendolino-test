export default function WhiteBox(props: {title: string, body: JSX.Element | string}): JSX.Element {
    return <>
        <div className="p-5 bg-white border-solid border-black border-4">
            <div className="text-2xl border-solid border-black border-b-4 py-5">{props.title}</div>
            <div className="my-5">{props.body}</div>
        </div>
    </>
}