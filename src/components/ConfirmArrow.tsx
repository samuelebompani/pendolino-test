export default function ConfirmArrow(props: {onClick?: any}): JSX.Element {
    return <div className="grid items-center">
        <div
        className="cursor-pointer w-4 h-4 border-solid border-black border-t-4 border-r-4 rotate-45"
        onClick={props.onClick}>
        </div>
    </div>
}