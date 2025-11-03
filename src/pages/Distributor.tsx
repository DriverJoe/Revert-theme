import { useState } from "react";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { MapPin, Phone, Mail } from "lucide-react";

const Distributor = () => {
  const [region, setRegion] = useState("");
  
  const distributors = [
    {
      name: "AgriPro Distributors",
      region: "North",
      address: "123 Farm Road, Northern Territory",
      phone: "+1 555-0100",
      email: "contact@agripro.example.com"
    },
    {
      name: "Southern Agricultural Supply",
      region: "South",
      address: "456 Harvest Lane, Southern Region",
      phone: "+1 555-0200",
      email: "info@southernag.example.com"
    },
    {
      name: "East Coast Farm Solutions",
      region: "East",
      address: "789 Crop Street, Eastern District",
      phone: "+1 555-0300",
      email: "hello@eastcoast.example.com"
    },
    {
      name: "Western AgriTech",
      region: "West",
      address: "321 Valley Road, Western Province",
      phone: "+1 555-0400",
      email: "support@westernagri.example.com"
    },
  ];

  const filteredDistributors = region 
    ? distributors.filter(d => d.region === region)
    : distributors;

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="py-16 bg-muted">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center mb-12">
            <h1 className="text-4xl md:text-5xl font-bold mb-4">Find A Distributor</h1>
            <p className="text-xl text-muted-foreground">
              Connect with authorized ReVert distributors in your area
            </p>
          </div>

          <div className="max-w-2xl mx-auto mb-12">
            <Card>
              <CardHeader>
                <CardTitle>Search for Distributors</CardTitle>
                <CardDescription>Filter by region to find distributors near you</CardDescription>
              </CardHeader>
              <CardContent className="space-y-4">
                <div className="grid md:grid-cols-2 gap-4">
                  <Input placeholder="Enter your location" />
                  <Select value={region} onValueChange={setRegion}>
                    <SelectTrigger>
                      <SelectValue placeholder="Select region" />
                    </SelectTrigger>
                    <SelectContent>
                      <SelectItem value="all">All Regions</SelectItem>
                      <SelectItem value="North">North</SelectItem>
                      <SelectItem value="South">South</SelectItem>
                      <SelectItem value="East">East</SelectItem>
                      <SelectItem value="West">West</SelectItem>
                    </SelectContent>
                  </Select>
                </div>
                <Button className="w-full">Search</Button>
              </CardContent>
            </Card>
          </div>

          <div className="grid md:grid-cols-2 gap-6">
            {filteredDistributors.map((distributor, index) => (
              <Card key={index}>
                <CardHeader>
                  <CardTitle>{distributor.name}</CardTitle>
                  <CardDescription>{distributor.region} Region</CardDescription>
                </CardHeader>
                <CardContent className="space-y-3">
                  <div className="flex items-start gap-3 text-sm">
                    <MapPin className="h-5 w-5 text-accent mt-0.5" />
                    <span>{distributor.address}</span>
                  </div>
                  <div className="flex items-center gap-3 text-sm">
                    <Phone className="h-5 w-5 text-accent" />
                    <a href={`tel:${distributor.phone}`} className="hover:text-primary">
                      {distributor.phone}
                    </a>
                  </div>
                  <div className="flex items-center gap-3 text-sm">
                    <Mail className="h-5 w-5 text-accent" />
                    <a href={`mailto:${distributor.email}`} className="hover:text-primary">
                      {distributor.email}
                    </a>
                  </div>
                  <Button variant="outline" className="w-full mt-4">Contact Distributor</Button>
                </CardContent>
              </Card>
            ))}
          </div>
        </div>
      </section>

      <section className="py-16 bg-primary text-primary-foreground">
        <div className="container text-center">
          <h2 className="text-3xl font-bold mb-4">Interested in Becoming a Distributor?</h2>
          <p className="text-lg mb-8 max-w-2xl mx-auto opacity-90">
            Join our network of trusted partners and bring sustainable agricultural solutions to your community
          </p>
          <Button size="lg" variant="secondary" asChild>
            <a href="/contact">Apply Now</a>
          </Button>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default Distributor;
