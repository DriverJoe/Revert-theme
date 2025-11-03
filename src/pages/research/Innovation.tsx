import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import researchImage from "@/assets/research.jpg";
import { Microscope, Beaker, Dna, Lightbulb } from "lucide-react";

const Innovation = () => {
  const innovations = [
    {
      icon: Dna,
      title: "Biotechnology Research",
      description: "Developing next-generation biological solutions for crop protection and enhancement",
    },
    {
      icon: Beaker,
      title: "Sustainable Chemistry",
      description: "Creating eco-friendly formulations with minimal environmental impact",
    },
    {
      icon: Microscope,
      title: "Soil Microbiome",
      description: "Unlocking the power of beneficial soil organisms for improved plant health",
    },
    {
      icon: Lightbulb,
      title: "Precision Agriculture",
      description: "Leveraging data and technology for optimized resource management",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div
          className="absolute inset-0 bg-cover bg-center"
          style={{ backgroundImage: `url(${researchImage})` }}
        >
          <div className="absolute inset-0 bg-primary/80" />
        </div>
        <div className="container relative z-10 text-center text-primary-foreground">
          <h1 className="text-5xl md:text-6xl font-bold mb-4">Innovation & Research</h1>
          <p className="text-xl md:text-2xl max-w-3xl mx-auto">
            Pioneering the future of sustainable agriculture through cutting-edge research
          </p>
        </div>
      </section>

      <section className="py-16 bg-background">
        <div className="container">
          <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-6 mb-16">
            {innovations.map((innovation, index) => (
              <Card key={index}>
                <CardHeader>
                  <innovation.icon className="h-12 w-12 text-accent mb-4" />
                  <CardTitle>{innovation.title}</CardTitle>
                  <CardDescription>{innovation.description}</CardDescription>
                </CardHeader>
              </Card>
            ))}
          </div>

          <div className="max-w-4xl mx-auto">
            <h2 className="text-3xl font-bold mb-6">Leading Agricultural Innovation</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground mb-8">
              <p>
                Our research and development team works at the forefront of agricultural science, developing innovative solutions that address today's challenges while anticipating tomorrow's needs.
              </p>
              <p>
                With state-of-the-art laboratories, field research stations, and partnerships with leading universities, we're constantly pushing the boundaries of what's possible in sustainable agriculture.
              </p>
            </div>

            <div className="bg-muted rounded-lg p-8 mb-8">
              <h3 className="text-2xl font-bold mb-6">Research Focus Areas</h3>
              <ul className="space-y-4">
                <li className="flex items-start gap-3">
                  <div className="mt-1 rounded-full bg-accent/20 p-1">
                    <Microscope className="h-4 w-4 text-accent" />
                  </div>
                  <div>
                    <h4 className="font-semibold mb-1">Climate Adaptation</h4>
                    <p className="text-sm text-muted-foreground">
                      Developing resilient solutions for changing climate conditions
                    </p>
                  </div>
                </li>
                <li className="flex items-start gap-3">
                  <div className="mt-1 rounded-full bg-accent/20 p-1">
                    <Dna className="h-4 w-4 text-accent" />
                  </div>
                  <div>
                    <h4 className="font-semibold mb-1">Biological Innovation</h4>
                    <p className="text-sm text-muted-foreground">
                      Harnessing nature's solutions for modern agriculture
                    </p>
                  </div>
                </li>
                <li className="flex items-start gap-3">
                  <div className="mt-1 rounded-full bg-accent/20 p-1">
                    <Beaker className="h-4 w-4 text-accent" />
                  </div>
                  <div>
                    <h4 className="font-semibold mb-1">Sustainable Formulations</h4>
                    <p className="text-sm text-muted-foreground">
                      Creating effective products with minimal environmental footprint
                    </p>
                  </div>
                </li>
              </ul>
            </div>

            <div className="flex gap-4">
              <Button asChild size="lg">
                <Link to="/research/case-studies">View Case Studies</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/contact">Partner With Us</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default Innovation;
