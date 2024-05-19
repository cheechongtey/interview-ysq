import { RouterProvider } from 'react-router-dom';
import router from "./router";
import ToastNotifications from "@/components/ToastNotifications";

function App() {
    return (
        <>
            <RouterProvider
                router={router}
            />
            <ToastNotifications />
        </>
    );
}

export default App;
