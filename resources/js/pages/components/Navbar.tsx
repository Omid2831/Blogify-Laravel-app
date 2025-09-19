import React from "react";
import { Link } from "@inertiajs/react";

const Navbar = () => {
  return (
    <header className="w-full z-50">
      <nav className="flex items-center justify-between border border-white/20 bg-white/10 px-6 py-3 backdrop-blur-md shadow-lg">
        {/* Logo */}
        <div className="text-xl font-bold text-white">Blogify</div>

        {/* Menu */}
        <ul className="flex space-x-6 text-white font-medium">
          <li className="hover:text-sky-300 cursor-pointer transition">
            <Link href={"/"}>
              Home
            </Link>
          </li>
          <li className="hover:text-sky-300 cursor-pointer transition">
            <Link href={"/page"}
              className="hover:text-sky-300 cursor-pointer transition">
              Page
            </Link>
          </li>
          <li className="hover:text-sky-300 cursor-pointer transition">
            <Link href="/About">
              About
            </Link>
          </li>
          <li className="hover:text-sky-300 cursor-pointer transition">Services</li>
          <li className="hover:text-sky-300 cursor-pointer transition">Contact</li>
        </ul>

        {/* Button */}
        <button className="rounded-xl bg-sky-500 px-4 py-2 text-white shadow-md hover:bg-sky-400 transition">
          Sign In
        </button>
      </nav>
    </header>
  );
}

export default Navbar;