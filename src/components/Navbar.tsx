import { Link, useLocation } from "react-router-dom";
import { Button } from "@/components/ui/button";
import { Sheet, SheetContent, SheetTrigger } from "@/components/ui/sheet";
import { Menu } from "lucide-react";
import {
  NavigationMenu,
  NavigationMenuContent,
  NavigationMenuItem,
  NavigationMenuLink,
  NavigationMenuList,
  NavigationMenuTrigger,
} from "@/components/ui/navigation-menu";

const Navbar = () => {
  const location = useLocation();

  const isActive = (path: string) => location.pathname === path;

  const productItems = [
    { title: "Crop Solutions", href: "/products/crop-solutions", description: "Advanced crop protection and nutrition" },
    { title: "Horticulture", href: "/products/horticulture", description: "Solutions for horticultural excellence" },
    { title: "Livestock Solutions", href: "/products/livestock", description: "Comprehensive livestock care" },
    { title: "Pest Management", href: "/products/pest-management", description: "Integrated pest management solutions" },
  ];

  const rdItems = [
    { title: "Case Studies", href: "/research/case-studies", description: "Real-world success stories" },
    { title: "Innovation", href: "/research/innovation", description: "Cutting-edge research and development" },
  ];

  const sustainabilityItems = [
    { title: "Overview", href: "/sustainability", description: "Our commitment to sustainability" },
    { title: "Community Programs", href: "/sustainability/community", description: "Supporting local communities" },
  ];

  return (
    <header className="sticky top-0 z-50 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <nav className="container flex h-16 items-center justify-between">
        <Link to="/" className="flex items-center space-x-2">
          <span className="text-2xl font-bold text-primary">ReVert</span>
        </Link>

        {/* Desktop Navigation */}
        <NavigationMenu className="hidden lg:flex">
          <NavigationMenuList>
            <NavigationMenuItem>
              <NavigationMenuTrigger>Products</NavigationMenuTrigger>
              <NavigationMenuContent>
                <ul className="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2">
                  {productItems.map((item) => (
                    <li key={item.href}>
                      <NavigationMenuLink asChild>
                        <Link
                          to={item.href}
                          className="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                        >
                          <div className="text-sm font-medium leading-none">{item.title}</div>
                          <p className="line-clamp-2 text-sm leading-snug text-muted-foreground">
                            {item.description}
                          </p>
                        </Link>
                      </NavigationMenuLink>
                    </li>
                  ))}
                </ul>
              </NavigationMenuContent>
            </NavigationMenuItem>

            <NavigationMenuItem>
              <NavigationMenuLink asChild>
                <Link
                  to="/distributor"
                  className={`group inline-flex h-9 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 ${
                    isActive("/distributor") ? "bg-accent" : ""
                  }`}
                >
                  Find A Distributor
                </Link>
              </NavigationMenuLink>
            </NavigationMenuItem>

            <NavigationMenuItem>
              <NavigationMenuTrigger>Sustainability</NavigationMenuTrigger>
              <NavigationMenuContent>
                <ul className="grid w-[400px] gap-3 p-4">
                  {sustainabilityItems.map((item) => (
                    <li key={item.href}>
                      <NavigationMenuLink asChild>
                        <Link
                          to={item.href}
                          className="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                        >
                          <div className="text-sm font-medium leading-none">{item.title}</div>
                          <p className="line-clamp-2 text-sm leading-snug text-muted-foreground">
                            {item.description}
                          </p>
                        </Link>
                      </NavigationMenuLink>
                    </li>
                  ))}
                </ul>
              </NavigationMenuContent>
            </NavigationMenuItem>

            <NavigationMenuItem>
              <NavigationMenuTrigger>Research & Development</NavigationMenuTrigger>
              <NavigationMenuContent>
                <ul className="grid w-[400px] gap-3 p-4">
                  {rdItems.map((item) => (
                    <li key={item.href}>
                      <NavigationMenuLink asChild>
                        <Link
                          to={item.href}
                          className="block select-none space-y-1 rounded-md p-3 leading-none no-underline outline-none transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                        >
                          <div className="text-sm font-medium leading-none">{item.title}</div>
                          <p className="line-clamp-2 text-sm leading-snug text-muted-foreground">
                            {item.description}
                          </p>
                        </Link>
                      </NavigationMenuLink>
                    </li>
                  ))}
                </ul>
              </NavigationMenuContent>
            </NavigationMenuItem>

            <NavigationMenuItem>
              <NavigationMenuLink asChild>
                <Link
                  to="/technical-sheets"
                  className={`group inline-flex h-9 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 ${
                    isActive("/technical-sheets") ? "bg-accent" : ""
                  }`}
                >
                  Technical Sheets
                </Link>
              </NavigationMenuLink>
            </NavigationMenuItem>

            <NavigationMenuItem>
              <NavigationMenuLink asChild>
                <Link
                  to="/about"
                  className={`group inline-flex h-9 w-max items-center justify-center rounded-md bg-background px-4 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground focus:outline-none disabled:pointer-events-none disabled:opacity-50 ${
                    isActive("/about") ? "bg-accent" : ""
                  }`}
                >
                  About Us
                </Link>
              </NavigationMenuLink>
            </NavigationMenuItem>
          </NavigationMenuList>
        </NavigationMenu>

        <div className="hidden lg:flex items-center gap-4">
          <Button asChild variant="default">
            <Link to="/contact">Contact Us</Link>
          </Button>
        </div>

        {/* Mobile Navigation */}
        <Sheet>
          <SheetTrigger asChild className="lg:hidden">
            <Button variant="ghost" size="icon">
              <Menu className="h-5 w-5" />
            </Button>
          </SheetTrigger>
          <SheetContent side="right" className="w-[300px] sm:w-[400px]">
            <nav className="flex flex-col gap-4 mt-8">
              <Link to="/" className="text-lg font-semibold hover:text-primary transition-colors">
                Home
              </Link>
              <div className="flex flex-col gap-2">
                <span className="text-sm font-semibold text-muted-foreground">Products</span>
                {productItems.map((item) => (
                  <Link
                    key={item.href}
                    to={item.href}
                    className="text-sm pl-4 hover:text-primary transition-colors"
                  >
                    {item.title}
                  </Link>
                ))}
              </div>
              <Link to="/distributor" className="text-lg font-semibold hover:text-primary transition-colors">
                Find A Distributor
              </Link>
              <div className="flex flex-col gap-2">
                <span className="text-sm font-semibold text-muted-foreground">Sustainability</span>
                {sustainabilityItems.map((item) => (
                  <Link
                    key={item.href}
                    to={item.href}
                    className="text-sm pl-4 hover:text-primary transition-colors"
                  >
                    {item.title}
                  </Link>
                ))}
              </div>
              <div className="flex flex-col gap-2">
                <span className="text-sm font-semibold text-muted-foreground">Research & Development</span>
                {rdItems.map((item) => (
                  <Link
                    key={item.href}
                    to={item.href}
                    className="text-sm pl-4 hover:text-primary transition-colors"
                  >
                    {item.title}
                  </Link>
                ))}
              </div>
              <Link to="/technical-sheets" className="text-lg font-semibold hover:text-primary transition-colors">
                Technical Sheets
              </Link>
              <Link to="/about" className="text-lg font-semibold hover:text-primary transition-colors">
                About Us
              </Link>
              <Button asChild className="mt-4">
                <Link to="/contact">Contact Us</Link>
              </Button>
            </nav>
          </SheetContent>
        </Sheet>
      </nav>
    </header>
  );
};

export default Navbar;
