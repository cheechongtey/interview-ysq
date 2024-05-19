import { Link } from 'react-router-dom';

export default function Header() {
  return (
    <header>
      <nav className="bg-intro-and-email flex items-center py-6 px-7 sm:py-7 sticky top-0 z-50">
        <ul className="flex ml-auto text-gray-400 space-x-6 text-xs sm:text-sm font-header">
          <li>
            <Link to="/" className="hover:text-white hover:underline">
              Home
            </Link>
          </li>
          <li>
            <Link to="/tnc" className="hover:text-white hover:underline">
              Tnc
            </Link>
          </li>
        </ul>
      </nav>
    </header>
  );
}
