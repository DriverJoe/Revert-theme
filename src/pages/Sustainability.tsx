import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { Leaf, Droplets, Recycle, Users, TreePine, Sun } from "lucide-react";

const Sustainability = () => {
  const commitments = [
    {
      icon: Leaf,
      title: "Carbon Neutrality",
      description: "Working towards net-zero emissions across our operations by 2030",
    },
    {
      icon: Droplets,
      title: "Water Conservation",
      description: "Innovative solutions that reduce water usage by up to 60%",
    },
    {
      icon: Recycle,
      title: "Circular Economy",
      description: "100% recyclable packaging and product lifecycle management",
    },
    {
      icon: TreePine,
      title: "Biodiversity",
      description: "Protecting and enhancing natural ecosystems through our practices",
    },
    {
      icon: Sun,
      title: "Renewable Energy",
      description: "Powered by 75% renewable energy sources",
    },
    {
      icon: Users,
      title: "Community Impact",
      description: "Supporting local farming communities through education and resources",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="relative py-20 bg-gradient-to-b from-accent/20 to-background">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center mb-16">
            <h1 className="text-4xl md:text-5xl font-bold mb-6">Our Commitment to Sustainability</h1>
            <p className="text-xl text-muted-foreground">
              Building a sustainable future for agriculture, one innovation at a time
            </p>
          </div>

          <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            {commitments.map((commitment, index) => (
              <Card key={index}>
                <CardHeader>
                  <commitment.icon className="h-12 w-12 text-accent mb-4" />
                  <CardTitle>{commitment.title}</CardTitle>
                  <CardDescription>{commitment.description}</CardDescription>
                </CardHeader>
              </Card>
            ))}
          </div>
        </div>
      </section>

      <section className="py-16 bg-muted">
        <div className="container">
          <div className="max-w-4xl mx-auto">
            <h2 className="text-3xl font-bold mb-6">Environmental Stewardship</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground mb-8">
              <p>
                At ReVert, sustainability isn't just a buzzword—it's the foundation of everything we do. From product development to distribution, we consider the environmental impact of every decision.
              </p>
              <p>
                Our commitment extends beyond our own operations. We partner with farmers, researchers, and communities to develop and implement sustainable agricultural practices that benefit both people and the planet.
              </p>
            </div>

            <div className="bg-card rounded-lg p-8 shadow-lg mb-8">
              <h3 className="text-2xl font-bold mb-6">2024 Sustainability Goals</h3>
              <div className="space-y-6">
                <div>
                  <div className="flex justify-between items-baseline mb-2">
                    <span className="font-medium">Renewable Energy Usage</span>
                    <span className="text-2xl font-bold text-accent">75%</span>
                  </div>
                  <div className="h-3 bg-muted rounded-full overflow-hidden">
                    <div className="h-full bg-accent rounded-full" style={{ width: "75%" }} />
                  </div>
                </div>
                <div>
                  <div className="flex justify-between items-baseline mb-2">
                    <span className="font-medium">Recyclable Packaging</span>
                    <span className="text-2xl font-bold text-accent">100%</span>
                  </div>
                  <div className="h-3 bg-muted rounded-full overflow-hidden">
                    <div className="h-full bg-accent rounded-full" style={{ width: "100%" }} />
                  </div>
                </div>
                <div>
                  <div className="flex justify-between items-baseline mb-2">
                    <span className="font-medium">Carbon Reduction</span>
                    <span className="text-2xl font-bold text-accent">45%</span>
                  </div>
                  <div className="h-3 bg-muted rounded-full overflow-hidden">
                    <div className="h-full bg-accent rounded-full" style={{ width: "45%" }} />
                  </div>
                </div>
              </div>
            </div>

            <div className="flex gap-4">
              <Button asChild size="lg">
                <Link to="/sustainability/community">Community Programs</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/research/innovation">Our Innovation</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default Sustainability;
